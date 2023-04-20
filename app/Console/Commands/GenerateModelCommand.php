<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateModelCommand extends Command
{
    protected $signature = 'ise:model {name : The name of the model}';

    protected $description = 'Generate eloquent and facade model';

    public function handle()
    {
        $name = $this->argument('name');
        $name = ucfirst($name);

        $eloquentModelDirectory = app_path("Core/Domain/Models/Eloquents/{$name}");
        $facadeModelDirectory = app_path("Core/Domain/Models/Facades/{$name}");
        $facadeRepositoryDirectory = app_path("Core/Domain/Repositories");

        if (!is_dir($eloquentModelDirectory)) {
            mkdir($eloquentModelDirectory, 0777, true);
        }

        if (!is_dir($facadeModelDirectory)) {
            mkdir($facadeModelDirectory, 0777, true);
        }

        if (!is_dir($facadeRepositoryDirectory)) {
            mkdir($facadeRepositoryDirectory, 0777, true);
        }

        // Create the eloquent model file
        $eloquentStub = File::get(base_path('stubs/models/eloquent.stub'));
        $eloquentStub = str_replace('{model_name}', $name, $eloquentStub);
        $eloquentPath = "{$eloquentModelDirectory}/{$name}.php";
        File::put($eloquentPath, $eloquentStub);

        // Create the facade model file
        $facadeStub = File::get(base_path('stubs/models/facade.stub'));
        $facadeStub = str_replace('{model_name}', $name, $facadeStub);
        $facadePath = "{$facadeModelDirectory}/{$name}.php";
        File::put($facadePath, $facadeStub);

        // Create the facade repository file
        $repositoryStub = File::get(base_path('stubs/models/repository.stub'));
        $repositoryStub = str_replace('{model_name}', $name, $repositoryStub);
        $repositoryPath = "{$facadeRepositoryDirectory}/Sql{$name}Repository.php";
        File::put($repositoryPath, $repositoryStub);

        $this->info('Models generated successfully.');
        $this->info("Eloquent: {$eloquentPath}");
        $this->info("Facade: {$facadePath}");
        $this->info("Repository: {$repositoryPath}");
    }
}
