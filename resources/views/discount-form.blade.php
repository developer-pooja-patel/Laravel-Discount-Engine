<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Form</title>
</head>
<body>
    <h1>Apply Discount</h1>
    <form action="{{ route('apply-discount') }}" method="POST" Content-Type:"application/json" Accept: "application/json">
        @csrf
        <label for="cart_total">Cart Total:</label>
        <input type="number" name="cart_total" id="cart_total" required><br><br>

        <label for="items">Items (comma separated):</label>
        <input type="text" name="items" id="items" required>

        <button type="submit">Apply Discount</button>
    </form>
</body>
</html>
