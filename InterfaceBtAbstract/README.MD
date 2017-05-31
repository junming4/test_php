该目录存放接口(interface)区别于抽象函数abstract
     #接口和抽象函数的相同
         1)、都不能实例化，只能被其他文件继承或者实现
         2)、继承的基类，必须实现所有函数
         3)、都可以在里面定义常量函数
     #接口和抽象函数的不同
        1)、接口没有成员对象，抽象函数可以有
        2)、接口定义函数只能是public function test();没有实体，
        抽象函数是可以 public function test(){return true;}
        可以实现具体事务，接口函数只能使用 public去描述，抽象函数可以使用
        public、protected、private 去描述,如果是抽象方法（abstract）就跟
        接口一样没有实体的
      
