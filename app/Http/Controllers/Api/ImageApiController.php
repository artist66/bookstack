<?php

namespace BookStack\Http\Controllers\Api;

use BookStack\Exceptions\FileUploadException;
use BookStack\Uploads\ImageRepo;
use Exception;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ImageApiController extends ApiController
{
	protected $imageRepo;

    public function __construct(ImageRepo $imageRepo)
    {
		$this->imageRepo = $imageRepo;
    }

     /**
     * Get a list of gallery images, in a list.
     * Can be paged and filtered by entity.
     */
    public function list(Request $request)
    {
        $page = $request->get('page', 1);
        $searchTerm = $request->get('search', null);
        $uploadedToFilter = $request->get('uploaded_to', 1);
        $parentTypeFilter = $request->get('filter_type', null);

        $imgData = $this->imageRepo->getEntityFiltered('gallery', $parentTypeFilter, $page, 24, $uploadedToFilter, $searchTerm);
		
		return response()->json([
            'images'  => $imgData['images'],
            'hasMore' => $imgData['has_more'],
        ]);
    }

    /**
     * Store a new gallery image in the system.
     *
     * @throws ValidationException
     */
    public function create(Request $request)
    {
        $this->checkPermission('image-create-all');
        $this->validate($request, [
            'file' => $this->getImageValidationRules(),
        ]);

        try {
            $imageUpload = $request->file('file');
            $uploadedTo = $request->get('uploaded_to', 1);
            $image = $this->imageRepo->saveNew($imageUpload, 'gallery', $uploadedTo);
        } catch (ImageUploadException $e) {
            return response($e->getMessage(), 500);
        }

        return response()->json($image);
    }
}
