<!-- resources/views/auth/login.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="h-80vh w-screen flex justify-center items-center mt-8">
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login to Your Account</h2>
            <form id="loginForm" novalidate>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Enter your email" required>
                    <p class="text-red-500 text-sm mt-2 hidden" id="emailError">Please enter a valid email.</p>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                    <input type="password" id="password"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Enter your password" required>
                    <p class="text-red-500 text-sm mt-2 hidden" id="passwordError">Password is required.</p>
                </div>
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">Login</button>
            </form>
            <div class="text-center text-gray-600 mt-4">
                <button class="text-blue-500 font-semibold hover:underline">Forgot Password?</button>
            </div>
            <p class="text-center text-gray-600 mt-4">Don't have an account? <a href="register"
                    class="text-blue-500 font-semibold hover:underline">Sign Up</a></p>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Clear previous error messages
            document.querySelectorAll('.text-red-500').forEach(function(element) {
                element.classList.add('hidden');
            });

            let isValid = true;

            // Validate email
            const email = document.getElementById('email').value;
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!email || !emailPattern.test(email)) {
                document.getElementById('emailError').classList.remove('hidden');
                isValid = false;
            }

            // Validate password
            const password = document.getElementById('password').value;
            if (!password) {
                document.getElementById('passwordError').classList.remove('hidden');
                isValid = false;
            }

            if (isValid) {
                // Submit the form if all validations pass
                // You can handle the form submission here, e.g., send data to the server
                alert('Form submitted successfully!');
            }
        });
    </script>
@endsection
