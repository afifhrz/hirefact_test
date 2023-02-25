<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<script>  
function matchPassword() {  
  var pw1 = document.getElementById("pswd1").value;  
  var pw2 = document.getElementById("pswd2").value; 
  if(pw1 != pw2)  
  {   
    alert("Passwords did not match");  
  }  else {
    document.getElementById('formId').action='/createUser';
    document.getElementById('formId').submit(); 
  }
}  
</script>

<body>
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
        <h3 class="text-2xl font-bold text-center">Register new account</h3>
        <form action="" method="POST" id="formId">
            @csrf
            <div class="mt-4">
                <div>
                    <label class="block" for="email">Email<label>
                            <input type="text" name="email" placeholder="Email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" name="pswd1" id="pswd1" placeholder="Password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block">Confirm Password<label>
                            <input type="password" name="pswd2" id="pswd2" placeholder="Password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block" for="subdomain">Subdomain<label>
                            <select type="text" name="subdomain" placeholder="Subdomain"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                <option value="en">English</option>
                                <option value="id">Indonesian</option>
                                <option value="es">Spanish</option>
                            </select>
                </div>
                <div class="flex items-baseline justify-between">
                    <button type="button" onclick="matchPassword()" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>