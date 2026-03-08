<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Panel'; ?></title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
    
    <!-- CSS yang sama dengan website utama -->
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
    
    <!-- CSS tambahan untuk admin -->
    <style>
        /* Admin specific styles */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #fff;
        }
        
        .table th {
            background-color: #1f5faa;
            color: #fff;
            padding: 12px;
            text-align: left;
            font-weight: 600;
        }
        
        .table td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            vertical-align: top;
        }
        
        .table tr:hover {
            background-color: #f5f9ff;
        }
        
        .btn {
            display: inline-block;
            padding: 8px 15px;
            background-color: #1f5faa;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 600;
            margin: 2px;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        
        .btn:hover {
            background-color: #2b83ea;
        }
        
        .btn-danger {
            background-color: #dc3545;
        }
        
        .btn-danger:hover {
            background-color: #c82333;
        }
        
        .btn-success {
            background-color: #28a745;
        }
        
        .btn-success:hover {
            background-color: #218838;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
            font-weight: 500;
        }
        
        /* Form admin */
        .admin-form {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        
        .admin-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #1f5faa;
        }
        
        .admin-form input[type="text"],
        .admin-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            margin-bottom: 20px;
        }
        
        .admin-form textarea {
            resize: vertical;
        }
        
        /* Status badge */
        .badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .badge-active {
            background-color: #d4edda;
            color: #155724;
        }
        
        .badge-inactive {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        /* Admin navigation */
        .admin-nav {
            background-color: #1f5faa;
            margin-bottom: 20px;
        }
        
        .admin-nav a {
            padding: 15px 25px;
            display: inline-block;
            color: #fff;
            font-size: 14px;
            text-decoration: none;
            font-weight: 600;
            border-right: 1px solid rgba(255,255,255,0.1);
        }
        
        .admin-nav a:hover {
            background-color: #2b83ea;
        }
        
        .admin-nav a.active {
            background-color: #2b83ea;
        }
        
        /* Action buttons */
        .action-group {
            display: flex;
            gap: 5px;
            flex-wrap: wrap;
        }
        
        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 50px 20px;
            background: #f8f9fa;
            border-radius: 8px;
        }
        
        .empty-state p {
            margin-bottom: 20px;
            color: #6c757d;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div id="container">
        <header>
            <h1>Admin Portal Berita</h1>
        </header>
        
        <nav class="admin-nav">
            <a href="<?= base_url('/admin/artikel'); ?>" <?= uri_string() == 'admin/artikel' ? 'class="active"' : '' ?>>Dashboard</a>
            <a href="<?= base_url('/admin/artikel/add'); ?>" <?= uri_string() == 'admin/artikel/add' ? 'class="active"' : '' ?>>Tambah Artikel</a>
            <a href="<?= base_url('/artikel'); ?>" target="_blank">Lihat Website</a>
            <a href="<?= base_url('/about'); ?>" target="_blank">About</a>
        </nav>
        
        <div id="wrapper">
            <section id="main" style="width: 100%; float: none; padding: 20px;">