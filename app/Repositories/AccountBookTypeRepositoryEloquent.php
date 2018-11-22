<?php

namespace Sco\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sco\Contracts\Repositories\AccountBookTypeRepository;
use Sco\Models\AccountBookType;
use Sco\Validators\AccountBookTypeValidator;

/**
 * Class AccountBookTypeRepositoryEloquent.
 *
 * @package namespace Sco\Repositories;
 */
class AccountBookTypeRepositoryEloquent extends BaseRepository implements AccountBookTypeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AccountBookType::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
