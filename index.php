<?php 

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
// Filtro inizialmente impostato su tutti gli hotel
$filteredHotels = $hotels;

// Filtro per il parcheggio
$parkingFilter = isset($_GET['parking']) ? $_GET['parking'] === 'on' : false;

// Filtro per il voto
$voteFilter = isset($_GET['vote']) ? (int)$_GET['vote'] : null;

// Filtrare per parcheggio
if ($parkingFilter) {
    $filteredHotels = array_filter($filteredHotels, function($hotel) {
        return $hotel['parking'];
    });
}

// Filtrare per voto
if ($voteFilter) {
    $filteredHotels = array_filter($filteredHotels, function($hotel) use ($voteFilter) {
        return $hotel['vote'] >= $voteFilter;
    });
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 70%;
            border-collapse: collapse;
            margin: 0 auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
        }
        .center {
            text-align: center;
        }
        .filter-container {
            text-align: center;
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="filter-container">
        <form method="GET" action="">
            <label>
                <input type="checkbox" name="parking" <?php echo $parkingFilter ? 'checked' : ''; ?>>
                Solo hotel con parcheggio
            </label>
            <label>
                Voto minimo:
                <select name="vote">
                    <option value="">---</option>
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <option value="<?php echo $i; ?>" <?php echo ($voteFilter == $i) ? 'selected' : ''; ?>><?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
            </label>
            <button type="submit">Filtra</button>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Parcheggio</th>
                <th>Voto</th>
                <th>Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($filteredHotels) > 0): ?>
                <?php foreach($filteredHotels as $hotel): ?>
                    <tr>
                        <td><?php echo $hotel['name']; ?></td>
                        <td><?php echo $hotel['description']; ?></td>
                        <td class="center"><?php echo $hotel['parking'] ? 'Si' : 'No'; ?></td>
                        <td class="center"><?php echo $hotel['vote']; ?></td>
                        <td class="center"><?php echo $hotel['distance_to_center'] . ' Km'; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="center">Nessun hotel trovato con i criteri selezionati.</td>
                </tr>
            <?php endif; ?> 
        </tbody>
    </table>
</body>

</html>