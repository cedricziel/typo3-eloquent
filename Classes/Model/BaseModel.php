<?php

namespace CedricZiel\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseModel
 *
 * Inherit from this class to make a model
 *
 * @package CedricZiel\Eloquent\Model
 */
class BaseModel extends Model {

	protected $primaryKey = 'uid';
}
