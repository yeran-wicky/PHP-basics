<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cylinder</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f8ff; }
        .calculator { width: 100%; max-width: 400px; margin: 50px auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; background-color: #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        h2 { text-align: center; color: #007bff; }
        .form-group { margin-bottom: 1.5rem; }
        label { font-weight: bold; }
        .result { margin-top: 1rem; padding: 15px; background-color: #e9ecef; border-radius: 5px; }
        .btn-calculate { width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; border-radius: 3px; cursor: pointer; }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div>
    <h2>Cylinder</h2>
    <form id="cylinderForm">
        <div class="form-group">
            <label for="radius">Enter Radius:</label>
            <input type="number" name="radius" id="radius" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="height">Enter Height:</label>
            <input type="number" name="height" id="height" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="theta">Enter Theta (in radians):</label>
            <input type="number" step="any" name="theta" id="theta" class="form-control" required>
        </div>
        <button type="button" class="btn-calculate" onclick="cylinder()">Calculate</button>
        <div id="cyld" class="result"></div>
    </form>
</div>

<script>
    function cylinder(){
        $(document).ready(function(){
            $("#cylinderForm").submit(function(e) {
                e.preventDefault();
                alert("byy");
        var vals = $("input").map(function(){return $(this).val()}).get()

        $.ajax({
            type: 'POST',
            url: 'cylinder2.php',
            data: formData,
            success: function(response) {
                $("#cyld").html(response);
            }
        });
    }
</script>

</body>
</html>