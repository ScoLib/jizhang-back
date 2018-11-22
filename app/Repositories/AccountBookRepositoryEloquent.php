<?php

namespace Sco\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Sco\Contracts\Repositories\AccountBookRepository;
use Sco\Models\AccountBook;
use Sco\Validators\AccountBookValidator;

/**
 * Class AccountBookRepositoryEloquent.
 *
 * @package namespace Sco\Repositories;
 */
class AccountBookRepositoryEloquent extends BaseRepository implements AccountBookRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AccountBook::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
