<?php

namespace App\Http\Controllers\Admin;

use App\Models\Entities\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends AdminController
{
    /**
     * Set page meta values
     * @var array
     */
    protected $pageMeta = [
        'title' => 'İletişim Formu',
        'desc' => 'formları görüntüle, sil',
    ];

    /**
     * Set model localizations
     */
    protected $modelMeta = [
        'name' => 'contact',
        'singularTitle' => 'Form',
        'pluralTitle' => 'Formlar',
        'deleteTitle' => 'Formu',
    ];

    /**
     * Display of the resource.
     *
     * @param null $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Contact::findOrFail($id);

        return parent::show($row);
    }

    /**
     * Display a listing of the resource.
     *
     * @param null $rows
     * @return Response
     */
    public function index($rows = null)
    {
        $rows = Contact::latest()->get();

        return parent::index($rows);
    }

    /**
     * Soft Delete confirm the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function deleteConfirmation($id)
    {
        $row = Contact::findOrFail($id);

        return parent::deleteConfirmation($row);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $row = Contact::findOrFail($id);

        return parent::destroy($row);
    }

    /**
     * Hard Delete confirm the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function hardDeleteConfirmation($id)
    {
        $row = Contact::findOrFail($id);

        return parent::hardDeleteConfirmation($row);
    }
}
