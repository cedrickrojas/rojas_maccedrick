<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Add New Student</h2>
        <form action="/students/store" method="post" class="space-y-4">
            <div>
                <label class="block font-semibold">Last Name</label>
                <input type="text" name="last_name" class="w-full border px-3 py-2 rounded" required>
            </div>
            <div>
                <label class="block font-semibold">First Name</label>
                <input type="text" name="first_name" class="w-full border px-3 py-2 rounded" required>
            </div>
            <div>
                <label class="block font-semibold">Email</label>
                <input type="email" name="email" class="w-full border px-3 py-2 rounded" required>
            </div>
            <div class="flex justify-between">
                <a href="/students/index" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">⬅ Back</a>
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">💾 Save</button>
            </div>
        </form>
    </div>
</body>
</html>