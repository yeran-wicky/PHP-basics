<?php
class Cylinder {
    var $carr = array(0, 0, 0);

    public function __construct($rad, $hei, $the) {
        $this->carr[0] = $rad;
        $this->carr[1] = $hei;
        $this->carr[2] = $the;
    }

    public function calcarea() {
        $radius = $this->carr[0];
        $height = $this->carr[1];
        $area = 2 * (22 / 7) * $radius * ($radius + $height);
        return $area;
    }

    public function calcvol() {
        $radius = $this->carr[0];
        $height = $this->carr[1];
        $volume = (22 / 7) * $radius * $radius * $height;
        return $volume;
    }

    public function calchvol() {
        $radius = $this->carr[0];
        $height = $this->carr[1];
        $theta = $this->carr[2];
        $hvolume = (1 / 2) * $radius * $radius * ($theta - sin($theta)) * $height;
        return $hvolume;
    }
}

$results = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values from the form
    $radius = $_POST['radius'];
    $height = $_POST['height'];
    $theta = $_POST['theta'];

    // Create a new Cylinder object
    $cylinder = new Cylinder($radius, $height, $theta);

    // Calculate area, volume, and horizontal volume
    $results = [
        'area' => $cylinder->calcarea(),
        'volume' => $cylinder->calcvol(),
        'horizontal_volume' => $cylinder->calchvol()
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cylinder Calculations</title>
</head>
<body>
    <h2>Cylinder Calculator</h2>
    <form method="post" action="">
        <label>Radius:</label>
        <input type="number" name="radius" required><br><br>

        <label>Height:</label>
        <input type="number" name="height" required><br><br>

        <label>Angle (Theta in radians):</label>
        <input type="number" step="0.01" name="theta" required><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php if ($results): ?>
        <h3>Results:</h3>
        <p>Area = <?= $results['area'] ?></p>
        <p>Volume = <?= $results['volume'] ?></p>
        <p>Horizontal Volume = <?= $results['horizontal_volume'] ?></p>
    <?php endif; ?>
</body>
</html>