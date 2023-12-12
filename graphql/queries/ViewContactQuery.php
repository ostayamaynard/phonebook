<?php

namespace App\GraphQL\Queries;

use App\Models\Models\Contact;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class ViewContactQuery
{
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return Contact::findOrFail($args['id']);
    }
}
