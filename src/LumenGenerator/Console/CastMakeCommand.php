<?php

namespace Flipbox\LumenGenerator\Console;

class CastMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:cast';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new custom Eloquent cast class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Cast';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stub = '/stubs/cast.stub';

        return $this->resolveStubPath($stub);
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Casts';
    }
}
