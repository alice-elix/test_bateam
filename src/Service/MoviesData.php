<?php

namespace App\Service;

class MoviesData
{
	/** @var array */
    private $data;
    /** @var string */
    private $dataDir;

    public function __construct(
    	string $projectDir)
    {
    	$this->dataDir = sprintf('%s/data', $projectDir);

    }
    public function getData(): array
    {
    	$data = $this->insertData();
    	return $data;
    }

    public function insertData()
    {
    	$fileMovies = sprintf('%s/movies.json', $this->dataDir);
    	$jsonFile = file_get_contents($fileMovies);
        $movies = json_decode($jsonFile, false);

        return $movies;
    }
    

}