<?php

use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->seed(DatabaseSeeder::class);
});

it('runs all seeders in correct order', function () {
    // Assert that roles are created
    $this->assertDatabaseHas('roles', ['name' => 'Super Admin']);
    $this->assertDatabaseHas('roles', ['name' => 'Admin']);
    $this->assertDatabaseHas('roles', ['name' => 'User']);

    // Assert that permissions are created
    $this->assertDatabaseHas('permissions', ['name' => 'ViewAny:User']);
    $this->assertDatabaseHas('permissions', ['name' => 'Create:User']);
    $this->assertDatabaseHas('permissions', ['name' => 'Update:User']);
    $this->assertDatabaseHas('permissions', ['name' => 'Delete:User']);

    // Assert that users are created
    $this->assertDatabaseHas('users', ['email' => 'superadmin@larast.com']);
    $this->assertDatabaseHas('users', ['email' => 'admin@larast.com']);
    $this->assertDatabaseHas('users', ['email' => 'user@larast.com']);

    // Assert that the Super Admin user has the correct role
    $superAdminUser = User::where('email', 'superadmin@larast.com')->first();
    expect($superAdminUser->hasRole('Super Admin'))->toBeTrue();

    // Assert that the Admin user has the correct role
    $adminUser = User::where('email', 'admin@larast.com')->first();
    expect($adminUser->hasRole('Admin'))->toBeTrue();

    // Assert that the Regular User has the correct role
    $regularUser = User::where('email', 'user@larast.com')->first();
    expect($regularUser->hasRole('User'))->toBeTrue();
});

it('creates expected number of records', function () {
    // Assert the correct number of records are created
    expect(Role::count())->toBe(3);
    expect(Permission::count())->toBe(22);
    expect(User::count())->toBe(3);
});

it('does not duplicate records when run multiple times', function () {
    // Run the DatabaseSeeder again
    $this->seed(DatabaseSeeder::class);

    // Assert that records are not duplicated
    expect(Role::count())->toBe(3);
    expect(Permission::count())->toBe(22);
    expect(User::count())->toBe(3);
});
