<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class RedirectIfAuthenticated {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

		if (\Auth::check())
		{
            $tip=DB::table('users')->where('id', '=', \Auth::id())->pluck('accounttype');
            //so this one doesn't work
            if($tip=='Student')
                return new RedirectResponse(url('/student/grades'));
            if($tip=='Staff')
                return new RedirectResponse(url('/adminstaff/students'));
        return new RedirectResponse(url('/home'));
		}

		return $next($request);
	}

}
