<?php

namespace App\GraphQL\Mutations;

use App\Models\Models\Contact;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class CreateContactMutation
{
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return Contact::create($args['input']);
    }
}
