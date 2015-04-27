<?php

namespace Laradic\Contracts\Database;


interface Sluggable {

	public function getSlug();

	public function sluggify($force=false);

	public function resluggify();

}
