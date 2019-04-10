<?php
Route::get('/admin','AdminControllers@index');
 @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if(auth()->user()->isAdmin == 1){
        return $next($request);
      }
        return redirect('home')->with('error','You have not admin access');
    }
    public function handle($request,clouser $next)
    {
    	if(auth()->user)->isAdmin==1
    	{
    		return redirect('home')
    	}
    }
