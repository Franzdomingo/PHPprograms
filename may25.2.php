<!DOCTYPE html>
<html>
<head>
    <title>Volume Calculator</title>
</head>
<body>
    <h2>Volume Calculator</h2>

    <div style="border: 1px solid black; padding: 10px;">
  <form>
    <center>
    <h3>Cube</h3>
    <label for="cubeSideLength">Side Length:</label>
    <input type="number" name="cubeSideLength" step="0.01" required><br>
    <p>Volume = sideLength³</p>
    <p>Surface Area = 6 * sideLength²</p><br>

    <h3>Right Rectangular Prism</h3>
    <label for="rectPrismLength">Length:</label>
    <input type="number" name="rectPrismLength" step="0.01" required><br>
    <label for="rectPrismWidth">Width:</label>
    <input type="number" name="rectPrismWidth" step="0.01" required><br>
    <label for="rectPrismHeight">Height:</label>
    <input type="number" name="rectPrismHeight" step="0.01" required><br>
    <p>Volume = length * width * height</p>
    <p>Surface Area = 2 * (length * width + width * height + height * length)</p><br>

    <h3>Cylinder</h3>
    <label for="cylinderRadius">Radius:</label>
    <input type="number" name="cylinderRadius" step="0.01" required><br>
    <label for="cylinderHeight">Height:</label>
    <input type="number" name="cylinderHeight" step="0.01" required><br>
    <p>Volume = π * radius² * height</p>
    <p>Surface Area = 2 * π * radius * (radius + height)</p><br>

    <h3>Pyramid</h3>
    <label for="pyramidBaseArea">Base Area:</label>
    <input type="number" name="pyramidBaseArea" step="0.01" required><br>
    <label for="pyramidHeight">Height:</label>
    <input type="number" name="pyramidHeight" step="0.01" required><br>
    <p>Volume = (1/3) * baseArea * height</p>
    <p>Surface Area = baseArea + (1/2) * perimeter * slantHeight</p><br>

    <h3>Sphere</h3>
    <label for="sphereRadius">Radius:</label>
    <input type="number" name="sphereRadius" step="0.01" required><br>
    <p>Volume = (4/3) * π * radius³</p>
    <p>Surface Area = 4 * π * radius²</p><br>

    <input type="submit" value="Calculate">
    <center/>
  </form>
</div>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // User-defined function to calculate the volume of a cube
        function calculateCubeVolume($sideLength) {
            $volume = pow($sideLength, 3);
            return $volume;
        }

        // User-defined function to calculate the volume of a right rectangular prism
        function calculateRectangularPrismVolume($length, $width, $height) {
            $volume = $length * $width * $height;
            return $volume;
        }

        // User-defined function to calculate the volume of a cylinder
        function calculateCylinderVolume($radius, $height) {
            $volume = M_PI * pow($radius, 2) * $height;
            return $volume;
        }

        // User-defined function to calculate the volume of a pyramid
        function calculatePyramidVolume($baseArea, $height) {
            $volume = ($baseArea * $height) / 3;
            return $volume;
        }

        // User-defined function to calculate the volume of a sphere
        function calculateSphereVolume($radius) {
            $volume = (4 / 3) * M_PI * pow($radius, 3);
            return $volume;
        }
        // Get the user's inputs from the form
        $cubeSideLength = $_POST['cubeSideLength'];
        $rectPrismLength = $_POST['rectPrismLength'];
        $rectPrismWidth = $_POST['rectPrismWidth'];
        $rectPrismHeight = $_POST['rectPrismHeight'];
        $cylinderRadius = $_POST['cylinderRadius'];
        $cylinderHeight = $_POST['cylinderHeight'];
        $pyramidBaseArea = $_POST['pyramidBaseArea'];
        $pyramidHeight = $_POST['pyramidHeight'];
        $sphereRadius = $_POST['sphereRadius'];

        // Calculate the volumes using the user's inputs
        $cubeVolume = calculateCubeVolume($cubeSideLength);
        $rectangularPrismVolume = calculateRectangularPrismVolume($rectPrismLength, $rectPrismWidth, $rectPrismHeight);
        $cylinderVolume = calculateCylinderVolume($cylinderRadius, $cylinderHeight);
        $pyramidVolume = calculatePyramidVolume($pyramidBaseArea, $pyramidHeight);
        $sphereVolume = calculateSphereVolume($sphereRadius);

        // Display the volumes
        echo "<h3>Results</h3>";
        echo "Volume of Cube: " . $cubeVolume . "<br>";
        echo "Volume of Right Rectangular Prism: " . $rectangularPrismVolume . "<br>";
        echo "Volume of Cylinder: " . $cylinderVolume . "<br>";
        echo "Volume of Pyramid: " . $pyramidVolume . "<br>";
        echo "Volume of Sphere: " . $sphereVolume . "<br>";
    }
    ?>
</body>
</html>

