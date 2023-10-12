<?php
require_once __DIR__.'/_header.php';
if(!_is_admin()){ header('Location: /login'); exit(); };

$db = _db();
$q = $db->prepare(' SELECT user_id, user_name, user_last_name, user_email, user_tag_color
                    FROM users WHERE user_role_name = "employee" LIMIT 10');
$q->execute();
$users = $q->fetchAll();                  
?>


<div class="mt-16 pb-20 mr-4 px-4 bg-white rounded-md text-slate-500">

  <div class="flex py-4 text-xl">
    <h1 class="text-black">
      Employees
    </h1>
    <form action="/search-results" method="GET" class="relative flex items-center w-1/3 ml-auto">
      <input name="query" type="text" 
      class="w-full pl-7 bg-slate-200" 
      placeholder="Search"
      oninput="search_employees()"
      >
      <button class="absolute flex items-center">
        <span class="material-symbols-outlined ml-1 font-thin">
          search
        </span>            
      </button>
      <div class="absolute top-full w-full h-48 bg-white border border-slate-300">
        <div class="grid grid-cols-[100fr,100fr,50fr] p-2">
          <div class="">Abigayle</div>
          <div class="">Wunsch</div>
          <div class="">10000</div>
        </div>
      </div>
    </form>
  </div>


  <?php if( ! $users ): ?>
    <h1>No employees in the system</h1>
  <?php endif ?>

  <?php foreach($users as $user): ?>
    <div class="flex items-center gap-4 border-b border-b-slate-200 py-2">
      <div class="hidden"><?= $user['user_id'] ?></div>
      <div class="flex items-center justify-center w-10 h-8 text-white text-sm rounded-full" style="background-color: <?php out($user['user_tag_color']); ?>">
        <?php out($user['user_name'][0]) ?>
      </div>
      <div class="w-1/4"><?php out($user['user_name']) ?></div>
      <div class="w-1/4"><?php out($user['user_last_name']) ?></div>
      <div class="w-2/5"><?php out($user['user_email']) ?></div>
      <button class="ml-auto">
        <span class="material-symbols-outlined mr-2 font-thin">
          visibility
        </span>        
      </button> 
      <button class="">
        <span class="material-symbols-outlined mr-2 font-thin">
            edit_note
          </span>        
      </button> 
      <button class="">
        <span class="material-symbols-outlined mr-2 font-thin">
            open_in_new
          </span>        
      </button>                
      <button class="">
        <span class="material-symbols-outlined mr-2 font-thin">
            delete
          </span>        
      </button>
    </div>
  <?php endforeach ?>
</div>



<?php
require_once __DIR__.'/_footer.php';
?>