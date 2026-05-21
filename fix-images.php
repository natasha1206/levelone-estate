<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$properties = App\Models\Property::all();
foreach ($properties as $property) {
    if (is_string($property->images)) {
        $decoded = json_decode($property->images, true);
        if (is_string($decoded)) {
            $decoded = json_decode($decoded, true);
        }
        if (is_array($decoded)) {
            $property->images = $decoded;
        } else {
            $property->images = [];
        }
        $property->save();
        echo "Fixed: {$property->title}\n";
    }
}
echo "Done!\n";