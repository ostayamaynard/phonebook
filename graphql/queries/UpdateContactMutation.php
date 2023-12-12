<?php

namespace App\GraphQL\Mutations;

use App\Models\Models\Contact;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class UpdateContactMutation
{
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $contact = Contact::findOrFail($args['id']);
        $contact->update($args['input']);

        return $contact;
    }
}
