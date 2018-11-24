<?php

namespace Sco\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sco\Contracts\Repositories\AssetTypeRepository;
use Sco\Models\AssetType;
use Sco\Validators\AssetTypeValidator;

/**
 * Class AssetTypeRepositoryEloquent.
 *
 * @package namespace Sco\Repositories;
 */
class AssetTypeRepositoryEloquent extends BaseRepository implements AssetTypeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AssetType::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
