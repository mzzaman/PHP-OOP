<?php
class UserList{
    private string $id, $userName, $active_status;
    public function __construct(string $id, string $userName, string $active_status)
    {
        $this->id = $id;
        $this->userName = $userName;
        $this->active_status = $active_status;
    }

    public function showUserList():string{
        return "Id: ". $this->id
                ."\nUserName: ".$this->userName
                ."\nStatus: ".$this->active_status."\n";
    }
}
// read table data and create object array;
function readUserFromDatabase(array &$users):array{
    $table_data = [
        ['1','devil1', 'active'],
        ['2', 'devil2', 'inactive'],
        ['3', 'devil3', 'active']
    ];
    foreach ($table_data as $data){
        $id = $data[0];
        $name = $data[1];
        $status = $data[2];
        $users[] = new UserList($id, $name, $status);
    }
    return  $users;
}

$users = [];
readUserFromDatabase($users);
$i = 1;
foreach ($users as $user){
    echo  "\n User No # ".$i .":\n";
    echo $user->showUserList();
    $i++;
}