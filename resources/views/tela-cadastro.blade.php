<x-base>
    

<div class=p-12></div>

<form action="{{route('SalvaUsuario')}}" class="max-w-sm mx-auto" method="post"  >
@csrf
  <div class="mb-5">
    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seu nome</label>
    <input type="text" name="nome" id="nome" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Digite seu nome" required />
  </div>
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seu email</label>
    <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Digite seu email" required />
  </div>
  <div class="mb-5">
    <label for="senha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sua senha.</label>
    <input type="password" name="senha" id="senha" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Digite sua senha" required />
  </div>
  <div class="mb-5">
    <label for="confirma-senha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repita a senha</label>
    <input type="password" name="confirma-senha" id="confirma-senha" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Repita a senha" required />
  </div>
  <div class="flex items-start mb-5">
    <div class="flex items-center h-5">
    <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
    </div>
    <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Eu concordo com os <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">termos e condições</a></label>
  </div>
     
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Criar conta</button>
</form>


</x-base>