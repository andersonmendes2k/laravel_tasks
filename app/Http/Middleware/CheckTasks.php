<?php

namespace App\Http\Middleware;

use Closure;

class CheckTasks
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $ids = $request->session()->get('todotasks');

        if (!in_array($request->id, $ids)){
            $request->session()->flash('error', 'Não foi possivel excluir o item '.$request->id.' da lista');
            return redirect()->route('clients.index');
        }else{
            $request->session()->flash('success','item '.$request->id.' removido com sucesso');
        }
        return $next($request);
    }
}
