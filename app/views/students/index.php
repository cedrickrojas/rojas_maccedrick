<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6">Students List</h1>

        <div class="flex gap-2">
            <a href="/students/create" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                + Add Student
            </a>

            <a href="/students/delete_all"
                onclick="return confirm('Are you sure you want to delete ALL records?')"
                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                Delete All
            </a>
        </div>



        <!-- Students Table -->
        <div class="overflow-x-auto mt-6">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-left">
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Last Name</th>
                        <th class="py-2 px-4 border-b">First Name</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <th class="py-2 px-4 border-b text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($students)): ?>
                        <?php foreach ($students as $student): ?>
                            <tr>
                                <td class="py-2 px-4 border-b"><?= $student['id'] ?></td>
                                <td class="py-2 px-4 border-b"><?= $student['last_name'] ?></td>
                                <td class="py-2 px-4 border-b"><?= $student['first_name'] ?></td>
                                <td class="py-2 px-4 border-b"><?= $student['email'] ?></td>
                                <td class="py-2 px-4 border-b text-center">
                                    <a href="/students/edit/<?= $student['id'] ?>" 
                                       class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                                        Edit
                                    </a>
                                    <a href="/students/delete/<?= $student['id'] ?>" 
                                       onclick="return confirm('Are you sure you want to delete this student?')"
                                       class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-1">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center py-4">No students found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>