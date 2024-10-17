<?php

# membuat class Animal
class Animal
{
    # property animals
    private $animals;

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data) {
        $this->animals = ['Otters', 'Koala', 'Lion'];
    }

    # method index - menampilkan data animals
    public function index()
    {
        # gunakan foreach untuk menampilkan data animals (array)
        return $this->animals;
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($animal_name)
    {
        # gunakan method array_push untuk menambahkan data baru
        $this->animals[] = $animal_name;
        return "Hewan {$animal_name} berhasil ditambahkan.";
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $new_name) {
        if (isset($this->animals[$index])) {
            $old_name = $this->animals[$index];
            $this->animals[$index] = $new_name;
            return "Hewan {$old_name} berhasil diperbarui menjadi {$new_name}.";
        } else {
            return "Index tidak valid.";
        }
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        # gunakan method unset atau array_splice untuk menghapus data array
        if (isset($this->animals[$index])) {
            $removed_animal = $this->animals[$index];
            array_splice($this->animals, $index, 1); // Menghapus elemen array dan menata ulang indeks
            return "Hewan {$removed_animal} berhasil dihapus.";
        } else {
            return "Index tidak valid.";
        }
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(['Otters', 'Koala', 'Lion']);

echo "Animal List (Index) <br>";
print_r($animal->index());
echo "<br>";

echo "Animal List (Store) <br>";
$animal->store('Flamingo');
print_r($animal->index());
echo "<br>";

echo "Animal List (Update) <br>";
$animal->update(2, 'Fox');
print_r($animal->index());
echo "<br>";

echo "Animal List (Destroy) <br>";
$animal->destroy(1);
print_r($animal->index());
echo "<br>";