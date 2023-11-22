<!-- add_user.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna</title>

    <!-- Tautan ke file CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Tautan ke file JS Bootstrap (sertakan Popper.js sebelum Bootstrap.js) -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body class="bg-light">
    <!-- Navbar (Jangan lupa tautan ke navbar.php jika diinginkan) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <!-- ... (konten navbar) ... -->
    </nav>

    <!-- Sidebar (Jangan lupa tautan ke sidebar.php jika diinginkan) -->
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <!-- ... (konten sidebar) ... -->
            </nav>

            <!-- Konten Utama -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Tambah Pengguna</h1>
                </div>
                <!-- Formulir Tambah Pengguna -->
                <form method="post" action="process_add_user.php">
                    <div class="form-group">
                        <label for="new_username">Username:</label>
                        <input type="text" class="form-control" name="new_username" required>
                    </div>
                    <div class="form-group">
                        <label for="new_password">Password:</label>
                        <input type="password" class="form-control" name="new_password" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Role:</label>
                        <select class="form-control" name="role" required>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Pengguna</button>
                </form>
            </main>
        </div>
    </div>
</body>
</html>
