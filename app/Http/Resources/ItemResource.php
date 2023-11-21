<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        #todo turn $this->created_at into carbon and add 2 weeks if not completed
        return [
            'name'=>$this->name,
            'completed' => $this->completed ?: null,
            'due_date' => (New Carbon())->addWeeks(2),
        ];

    }
}
