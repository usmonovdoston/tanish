yii migrate/create create_users_table --fields="username:string(100),password:string(32),phone:string(20),email:string(100),authKey:string,accessToken:string,status:smallInteger:defaultValue(0),created_at:integer,updated_at:integer

yii migrate/create create_users_info_table --fields="users_id:integer:foreignKey,name:string,lastname:string,adress:string,birthplace:string,hobby:string,image:string,profession:string,type:smallInteger:defaultValue(1), add_info:text, status:smallInteger(6):defaultValue(1)"

yii migrate/create create_post_table --fields="title:string,excerpt:string,content:text,type:smallInteger:defaultValue(1), add_info:text, view:integer, last_read:integer, status:smallInteger(6):defaultValue(1),created_at:integer,updated_at:integer,created_by:integer:foreignKey(users),updated_by:integer:foreignKey(users)"

yii migrate/create create_subscribe_table --fields="from_users_id:integer:foreignKey(users),to_users_id:integer:foreignKey(users)"
yii migrate/create create_junction_table_for_users_and_users_table
