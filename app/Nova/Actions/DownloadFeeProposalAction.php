<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Http\Requests\NovaRequest;

class DownloadFeeProposalAction extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param  ActionFields  $fields
     * @param  Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        $invoiceController = new \App\Http\Controllers\DownloadFeeProposalController();
        $created = $invoiceController->generateInvoices($models, false);
        $path = $invoiceController->makePDF($models);

        return Action::download(url($path), uniqid().'.pdf');
    }

    /**
     * Get the displayable name of the action.
     *
     * @return string
     */
    public function name(): string
    {
        return 'Download fee proposal';
    }

    /**
     * Get the fields available on the action.
     *
     * @param  NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request): array
    {
        return [];
    }
}
