<?php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use GvsuWebTeam\Hotels\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use GvsuWebTeam\Hotels\Breadcrumbs\Generator as BreadcrumbTrail;

// Hotel
Breadcrumbs::for('hotels', function (BreadcrumbTrail $trail) {
    $trail->push('Hotels', route('hotels.index'));
});

// Hotel > Administrator > Hotels List
Breadcrumbs::for('administrator', function (BreadcrumbTrail $trail) {
	$trail->parent('hotels');
    $trail->push('Administrator', route('hotels.admin.index'));
    $trail->push('Hotels List');
});