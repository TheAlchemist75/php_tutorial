<?php
require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>EMS - Register</title>
</head>

<body>
    <section class="relative flex flex-wrap lg:h-screen lg:items-center">
        <div class="w-full px-4 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
            <div class="mx-auto max-w-lg text-center">
                <h1 class="text-2xl font-bold sm:text-3xl">Get started today!</h1>

                <p class="mt-4 text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla eaque error neque
                    ipsa culpa autem, at itaque nostrum!
                </p>
            </div>

            <form action="#" class="mx-auto mb-0 mt-8 max-w-md space-y-4" method="POST">
                <div>
                    <label for="emp_email" class="sr-only">Email</label>

                    <div class="relative">
                        <input class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter Email" name="emp_email" />

                        <label for="emp_name" class="sr-only">Name</label>

                        <div class="relative">
                            <input class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                                placeholder="Enter Name" name="emp_name" />

                            <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div>
                        <label for="password" class="sr-only">Password</label>

                        <div class="relative">
                            <input type="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                                placeholder="Enter password" name="emp_pass" />

                            <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between" style="margin-top: 10px;">
                        <p class="text-sm text-gray-500">
                            Already have an account?
                            <a class="underline" href="login.php">Login</a>
                        </p>

                        <button type="submit"
                            class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white"
                            name="emp_register">
                            Register
                        </button>
                    </div>
            </form>
        </div>

        <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
            <img alt=""
                src="https://images.unsplash.com/photo-1630450202872-e0829c9d6172?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                class="absolute inset-0 h-full w-full object-cover" />
        </div>
    </section>

    <?php
    if (isset ($_POST['emp_register'])) {
        if (empty ($_POST['emp_email']) || empty ($_POST['emp_name']) || empty ($_POST['emp_pass'])) {
            echo "<script>alert('Please fill in all fields')</script>";
        } else {

            $emp_email = $_POST['emp_email'];
            $emp_name = $_POST['emp_name'];
            $emp_pass = $_POST['emp_pass'];
            //$emp_pass = md5($_POST['emp_pass']); for encrypting
    
            $sql = "INSERT INTO emp_data (emp_email, emp_name, emp_pass) VALUES ('$emp_email', '$emp_name', '$emp_pass')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Employee added Successfully')</script>";
            } else {
                echo "Error:" . $sql . "<br/>" . mysqli_error($conn);
            }
        }
    }

    ?>
</body>

</html>