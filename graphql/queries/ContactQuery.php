<?php

namespace App\GraphQL\Resolvers;

use App\Models\Models\Contact;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class QueryResolvers
{
    public function contact($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return Contact::find($args['id']);
    }

    public function contacts($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return Contact::all();
    }
}