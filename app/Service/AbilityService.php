<?php

namespace App\Service;

use App\Models\Ability;
use Illuminate\Database\Eloquent\Model;

class AbilityService
{
    public function storeAbility(array $data): Ability
    {
        $ability = Ability::query()->create($data);

        if (isset($data['images'])) {
            $ability->images()->delete();

            foreach ($data['images'] as $image) {
                $path = $image->store('pokemon_images', 'public');
                $ability->images()->create([
                    'url' => $path,
                    'imageable_type' => Model::getActualClassNameForMorph(Ability::class),
                ]);
            }
        }

        return $ability;
    }
}
