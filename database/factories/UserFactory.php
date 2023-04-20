<?php

namespace Database\Factories;

use App\Core\Domain\Models\Eloquents\Provinsi\Provinsi;
use App\Core\Domain\Models\Eloquents\Role\Role;
use App\Core\Domain\Models\Eloquents\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->generateUUID(),
            'full_name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => $this->generatePassword(),
            'handphone' => $this->randomIndonesianPhoneNumber(),
            'referral' => $this->generateReferral(),
            'verified_at' => now(),
            'provinsi_id' => $this->randomProvinsi(),
            'role_id' => $this->randomRole(),
        ];
    }

    private function generateReferral(): string
    {
        $ref = array(
            "Media Sosial ISE!",
            "Media Partner ISE!",
            "Sekolah",
            "Teman/Keluarga"
        );

        $referral = $ref[array_rand($ref)];
        return $referral;
    }

    private function generateUUID(): string
    {
        $uuid = Str::uuid()->toString();
        return $uuid;
    }

    private function generatePassword(): string
    {
        $hashed = Hash::make('12345678', [
            'memory' => 65536,
            'time' => 4,
            'threads' => 1,
            'argon2i'
        ]);
        return $hashed;
    }

    private function randomProvinsi(): int
    {
        $provinsi_id = Provinsi::inRandomOrder()->first()->id;
        return $provinsi_id;
    }

    private function randomRole(): int
    {
        $role_id = Role::inRandomOrder()->first()->id;
        return $role_id;
    }

    private function randomIndonesianPhoneNumber(): string
    {
        $prefix = "+62";
        // randomize 10-14 digit
        $sufix = rand(0, 9999999999999);
        // pad sufix with 0 to 10 or 14 digit
        $sufix = str_pad($sufix, rand(10, 13), '0', STR_PAD_LEFT);
        $phone = $prefix . $sufix;
        return $phone;
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'verified_at' => null,
        ]);
    }

    public function role(int $role_id): static
    {
        return $this->state(fn (array $attributes) => [
            'role_id' => $role_id,
        ]);
    }
}
