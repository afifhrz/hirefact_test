<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
        <h3 class="text-2xl font-bold text-center">Login to your account</h3>
        <form action="user" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-4">
                <div>
                    <label class="block" for="email">Email<label>
                            <input type="text" name="email" placeholder="Email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" required>
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" name="password" placeholder="Password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" required>
                </div>
                <div class="mt-4 flex justify-center">
                    <div class="mb-3 w-96">
                        <label
                        for="formFile"
                        class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                        >File Upload Process</label
                        >
                        <input
                        class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out file:-mx-3 file:-my-1.5 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-1.5 file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:bg-white focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none dark:bg-transparent dark:text-neutral-200 dark:focus:bg-transparent"
                        type="file"
                        id="formFile"
                        name="formFile" required/>
                    </div>
                </div>
                <div class="flex items-baseline justify-between">
                    <button type="submit" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Login</button>
                    <a href="/register" class="text-sm text-blue-600 hover:underline">Register</a>
                </div>
            </div>
        </form>
    </div>
</div>
</body>