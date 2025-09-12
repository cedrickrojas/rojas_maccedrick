<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-lg mx-auto bg-white rounded-lg shadow-lg p-6">
    <h1 class="text-2xl font-bold mb-6">Edit Student</h1>

    <form action="/students/update/<?= $student['id'] ?>" method="POST" class="space-y-4">
        <div>
            <label class="block">Last Name</label>
            <input type="text" name="last_name" value="<?= $student['last_name'] ?>" class="w-full border px-3 py-2 rounded">
        </div>

        <div>
            <label class="block">First Name</label>
            <input type="text" name="first_name" value="<?= $student['first_name'] ?>" class="w-full border px-3 py-2 rounded">
        </div>

        <div>
            <label class="block">Email</label>
            <input type="email" name="email" value="<?= $student['email'] ?>" class="w-full border px-3 py-2 rounded">
        </div>

        <div class="flex justify-between">
            <a href="/students/index" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Back</a>
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">Update</button>
        </div>
    </form>
</div>

</body>
</html>