<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Room Types</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Manage Room Types (Admin)</h2>
            <a href="rooms.html" class="btn btn-outline-primary">Go to Room Management &rarr;</a>
        </div>

        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-primary text-white font-weight-bold">Add New Room Type</div>
            <div class="card-body">
                <form action="#" method="POST" class="row g-3">
                    <div class="col-md-3">
                        <label class="form-label">Type Name</label>
                        <input type="text" name="type_name" class="form-control" placeholder="e.g., Luxury Suite" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Base Price ($)</label>
                        <input type="number" step="0.01" name="base_price" class="form-control" placeholder="150.00" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Max Occupancy</label>
                        <input type="number" name="max_occupancy" class="form-control" placeholder="2" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" placeholder="King bed, sea view...">
                    </div>
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-success">Save Room Type</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-secondary text-white">Existing Room Types</div>
            <div class="card-body">
                <table class="table table-striped table-hover align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Max Guests</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><strong>Deluxe Room</strong></td>
                            <td>AC, Free Wi-Fi, King Bed</td>
                            <td>$120.00</td>
                            <td>2 Person(s)</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><strong>Standard Room</strong></td>
                            <td>Non-AC, Twin Bed</td>
                            <td>$50.00</td>
                            <td>2 Person(s)</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>