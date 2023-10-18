<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\SnippetRequest;
use App\Models\Blog;
use App\Models\Messages;
use App\Models\Snippet;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends BaseController
{

    function dashboard()
    {
        $data = auth()->user();
        return $this->ViewWithData('Admin/dashboard', 'data', $data);
    }




    // user table

    function UserTablePage()
    {

        $data = auth()->user();
        $user = $this->Select_column('paginate', User::class, '*', null, 12, 'id', 'DESC');

        $iterationCount = ($user->currentPage() - 1) * $user->perPage();

        return $this->ViewWithData('Admin/User/UserTable', 'data', $data, 'users', $user, 'iteration', $iterationCount);
    }


    public function updateUserStatus($user)
    {
        $id = $this->Select_column('first', User::class, '*', ['id' => $user]);

        if ($id->status == 'active') {
            $data = [
                'status' => 'inactive'
            ];

            $this->CRUD(User::class, ["id" => $user], 'update', $data);

            return $this->Move('redirect_with_message', 'UserTablePage', 'success', 'User Deactivated');
        } else {

            $data = [
                'status' => 'active'
            ];

            $this->CRUD(User::class, ["id" => $user], 'update', $data);

            return $this->Move('redirect_with_message', 'UserTablePage', 'success1', 'User Activated');
        }
    }

    // search

    public function search(Request $request)
    {
        $query = $request->input('query');
        $searchOption1 = $request->input('searchOption_1');
        $searchOption3 = $request->input('searchOption_3');


        $conditions = [['name', 'LIKE', '%' . $query . '%']];

        if ($searchOption1 === 'byEmail') {
            $conditions = [['email', 'LIKE', '%' . $query . '%']];
        }

        if ($searchOption3 === 'byRole') {
            $conditions = [['role', 'LIKE', '%' . $query . '%']];
        }

        $datas = $this->Select_column('paginate', User::class, '*', $conditions, 12, 'id', 'DESC');
        $iterationCount = ($datas->currentPage() - 1) * $datas->perPage();

        return view('admin/search/search_result', [
            'users' => $datas,
            'iteration' => $iterationCount
        ]);
    }


    public function UserEdit($user)
    {

        $user1 = auth()->user();
        $data = $this->Select_column('first', User::class, '*', ['id' => $user]);
        return $this->ViewWithData('Admin/User/UserEdit', 'data', $user1, 'user', $data);
    }

    public function UserUpdate(Request $request, $user)
    {

        $dataToUpdate = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
        ];

        $result = $this->CRUD(User::class, ['id' => $user], 'update', $dataToUpdate);

        if ($result) {
            return $this->Move('redirect_with_message', 'UserTablePage', 'success2', 'Info Updated');
        } else {
            return $this->Move('redirect_with_message', 'UserTablePage', 'fail', 'Failed to Update');
        }
    }

    // end user table


    // message table

    function MessageTable()
    {

        $data = auth()->user();

        $messages = $this->Select_column('paginate', Messages::class, '*', [], 12, 'created_at', 'DESC');

        $iterationCount = ($messages->currentPage() - 1) * $messages->perPage();

        return $this->ViewWithData('Admin/Message/MessageTable', 'data', $data, 'messages', $messages, 'iteration', $iterationCount);
    }

    public function MessageDelete($id)
    {
        $result = $this->CRUD(Messages::class, ['id' => $id], 'delete');

        if ($result) {
            return $this->Move('redirect_with_message', 'MessageTable', 'success', 'Message Deleted');
        } else {
            return $this->Move('redirect_with_message', 'MessageTable', 'error', 'Failed to Delete');
        }
    }

    function ViewMessage($id)
    {
        $data = auth()->user();
        $message = $this->Select_column('first', Messages::class, '*', ['id' => $id]);
        return $this->ViewWithData('Admin/Message/Message', 'message', $message, 'data', $data);
    }

    public function search_Message(Request $request)
    {
        $query = $request->input('query');
        $searchOption1 = $request->input('searchOption_1');
        $searchOption2 = $request->input('searchOption_2');

        $messagesQuery = Messages::query();

        $messagesQuery->join('users', 'messages.user_id', '=', 'users.id');

        $messagesQuery->select('messages.*', 'users.name as user_name', 'users.email as user_email');

        $messagesQuery->where(function ($queryBuilder) use ($query, $searchOption1, $searchOption2) {
            $queryBuilder->where('users.name', 'LIKE', '%' . $query . '%'); // Search by user name

            if ($searchOption1 === 'byEmail') {
                $queryBuilder->orWhere('users.email', 'LIKE', '%' . $query . '%'); // Search by user email
            }

            if ($searchOption2 === 'bySubject') {
                $queryBuilder->orWhere('messages.subject', 'LIKE', '%' . $query . '%'); // Search by message subject
            }
        });

        $datas = $messagesQuery->paginate(12);

        $iterationCount = ($datas->currentPage() - 1) * $datas->perPage();

        return view('admin/search/search_result_message', [
            'messages' => $datas,
            'iteration' => $iterationCount

        ]);
    }





    // end message table

    // start blog

    function BlogForm()
    {

        $data = auth()->user();
        return $this->ViewWithData('Admin/Blog/BlogForm', 'data', $data);
    }


    public function AddPost(BlogRequest $request)
    {


        $user = auth()->user()->id;
        $image = $request->file('image');

        $filename = $this->uploadFile('image', $image, 'Blog_img');

        $data = [
            'user_id' => $user,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $filename,
        ];

        $result = $this->CRUD(Blog::class, null, 'create', $data);

        if ($result) {
            return $this->Move('redirect_with_message', 'Blog', 'success', 'Post Added Successfuly!');
        } else {
            return $this->Move('redirect_with_message', 'Blog', 'error', 'Failed To Add Post');
        }
    }

    function BlogTable()
    {

        $data = auth()->user();

        $posts = $this->Select_column('paginate', Blog::class, '*', [], 12, 'created_at', 'DESC');

        $iterationCount = ($posts->currentPage() - 1) * $posts->perPage();

        return $this->ViewWithData('Admin/Blog/BlogTable', 'data', $data, 'posts', $posts, 'iteration', $iterationCount);
    }

    public function DeleteBlogPost($id)
    {

        $post = $this->Select_column('first', Blog::class, '*', ['id' => $id]);

        if ($post->image) {
            $oldImage = public_path('Blog_img') . '/' . $post->image;
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
        }

        $result = $this->CRUD(Blog::class, ['id' => $id], 'delete');


        if ($result) {
            return $this->Move('redirect_with_message', 'BlogTable', 'success', 'Message Deleted');
        } else {
            return $this->Move('redirect_with_message', 'BlogTable', 'error', 'Failed to Delete');
        }
    }

    public function EditBlog($id)
    {

        $user = auth()->user();
        $post = $this->Select_column('first', Blog::class, '*', ['id' => $id]);
        return $this->ViewWithData('Admin/Blog/BlogEdit', 'data', $user, 'post', $post);
    }

    public function EditBlogPost(Request $request, $id)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => '',
        ];

        $messages = [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than :max characters.',
            'description.required' => 'The description field is required.',
            'description.string' => 'The description must be a string.',
        ];

        $validatedData = $request->validate($rules, $messages);


        $post = $this->Select_column('first', Blog::class, '*', ['id' => $id]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $this->uploadFile('image', $image, 'blog_img');
        } else {
            $filename = $post->image;
        }

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $filename,
        ];

        $result = $this->CRUD(Blog::class, ['id' => $id], 'update', $data);

        if ($result) {
            return $this->Move('redirect_with_message', 'BlogTable', 'success1', 'Post Updated');
        } else {
            return $this->Move('redirect_with_message', 'BlogTable', 'error1', 'Failed To Update Post');
        }
    }

    // search

    public function search_Blog(Request $request)
    {
        $query = $request->input('query');

        $conditions = [['title', 'LIKE', '%' . $query . '%']];

        $datas = $this->Select_column('paginate', Blog::class, '*', $conditions, 12, 'id', 'DESC');
        $iterationCount = ($datas->currentPage() - 1) * $datas->perPage();

        return view('admin/search/search_result_blog', [
            'posts' => $datas,
            'iteration' => $iterationCount
        ]);
    }

    // end blog table


    // Snippet

    function SnippetForm()
    {
        $data = auth()->user();
        return $this->ViewWithData('Admin/Snippet/SnippetForm', 'data', $data);
    }

    // store into database
    function SnippetStore(SnippetRequest $request)
    {
        $user = auth()->user();

        $image = $this->GetFileFromRequest($request, 'snippet_image');

        $filename = $this->uploadFile('image', $image, 'Snippet_file');

        $data = [
            'user_id' => $user->id,
            'title' => $this->GetFromReuqest($request, 'snippet_title'),
            'description' => $this->GetFromReuqest($request, 'snippet_type'),
            'image' => $filename,
            'code' => $this->GetFromReuqest($request, 'snippet_code'),
            'category' => $this->GetFromReuqest($request, 'snippet_category')
        ];

        $this->CRUD(Snippet::class, null, 'create', $data);

        return $this->Move('back_with_message', null, 'success', 'Snippet added');
    }

    function SnippetTable()
    {
        $user = auth()->user();
        $snippet = $this->Select_column('paginate', Snippet::class, '*', null, 12, 'id', 'DESC');
        $iterationCount = ($snippet->currentPage() - 1) * $snippet->perPage();

        return $this->ViewWithData('Admin/Snippet/SnippetTable', 'data', $user, 'snippets', $snippet, 'iteration', $iterationCount);
    }

    function SnippetEdit($id)
    {
        $user = auth()->user();
        $snippet = $this->Select_column('first', Snippet::class, '*', ['id' => $id]);

        return $this->ViewWithData('Admin/Snippet/SnippetEdit', 'data', $user, 'snippet', $snippet);
    }

    function UpdateSnippet($id, Request $request)
    {

        // dd($request);

        $user = auth()->user();

        $snippet = $this->Select_column('first', Snippet::class, '*', ['id' => $id]);

        $image = $this->GetFileFromRequest($request, 'snippet_image');

        if (!$image) {
            $data = [
                'user_id' => $snippet->user->id,
                'title' => $this->GetFromReuqest($request, 'snippet_title'),
                'description' => $this->GetFromReuqest($request, 'snippet_type'),
                'image' => $snippet->image,
                'code' => $this->GetFromReuqest($request, 'snippet_code'),
                'category' => $this->GetFromReuqest($request, 'snippet_category')
            ];
        } else {

            $filename = $this->uploadFile('image', $image, 'Snippet_file');

            if ($snippet->image) {
                $oldImage = public_path('Snippet_file') . '/' . $snippet->image;
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            $data = [
                'user_id' => $snippet->user->id,
                'title' => $this->GetFromReuqest($request, 'snippet_title'),
                'description' => $this->GetFromReuqest($request, 'snippet_type'),
                'image' => $filename,
                'code' => $this->GetFromReuqest($request, 'snippet_code'),
                'category' => $this->GetFromReuqest($request, 'snippet_category')
            ];
        }
        $this->CRUD(Snippet::class, ['id' => $id], 'update', $data);

        return $this->Move('back_with_message', null, 'success', 'Snippet updated');
    }

    function SnippetDelete($id)
    {
        $result = $this->CRUD(Snippet::class, ['id' => $id], 'delete');

        if ($result) {
            return $this->Move('redirect_with_message', 'SnippetTable', 'success', 'Message Deleted');
        } else {
            return $this->Move('redirect_with_message', 'SnippetTable', 'error', 'Failed to Delete');
        }
    }

    public function search_Snippet(Request $request)
    {
        $query = $request->input('query');
        $searchOption1 = $request->input('searchOption_1');
        $searchOption2 = $request->input('searchOption_2');
        $searchOption3 = $request->input('searchOption_3');

        $messagesQuery = Snippet::query();

        $messagesQuery->join('users', 'snippets.user_id', '=', 'users.id');

        $messagesQuery->select('snippets.*', 'users.name as user_name', 'users.email as user_email');

        $messagesQuery->where(function ($queryBuilder) use ($query, $searchOption1, $searchOption2, $searchOption3) {
            $queryBuilder->where('users.name', 'LIKE', '%' . $query . '%'); // Search by user name

            if ($searchOption1 === 'byTitle') {
                $queryBuilder->orWhere('snippets.title', 'LIKE', '%' . $query . '%'); // Search by user email
            }

            if ($searchOption2 === 'byCategory') {
                $queryBuilder->orWhere('snippets.category', 'LIKE', '%' . $query . '%'); // Search by message subject
            }

            if ($searchOption3 === 'byStatus') {
                $queryBuilder->orWhere('snippets.status', 'LIKE', '%' . $query . '%'); // Search by message subject
            }
        });

        $datas = $messagesQuery->paginate(12);

        $iterationCount = ($datas->currentPage() - 1) * $datas->perPage();

        return view('admin/search/search_result_snippet', [
            'snippets' => $datas,
            'iteration' => $iterationCount

        ]);
    }

    function SnippetCheck($id)
    {
        $data = auth()->user();
        $snippet = $this->Select_column('first', Snippet::class, '*', ['id' => $id]);
        return $this->ViewWithData('Admin/Snippet/checkSnippet', 'data', $data, 'snippet', $snippet);
    }

    // publish
    function publish_snippet($id)
    {
        $data = [
            'status' => 'published'
        ];

        $this->CRUD(Snippet::class, ['id' => $id], 'update', $data);

        return $this->Move('redirect_with_message', 'SnippetTable', 'publish', 'this snippet is now available for all users');
    }

    // reject
    function reject_snippet($id)
    {
        $data = [
            'status' => 'rejected'
        ];

        $this->CRUD(Snippet::class, ['id' => $id], 'update', $data);

        return $this->Move('redirect_with_message', 'SnippetTable', 'publish', 'this snippet is rejected');
    }
}
