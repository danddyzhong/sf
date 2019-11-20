<?php
/**
 * https://mp.weixin.qq.com/s/vn3KiV-ez79FmbZ36SX9lg
 * https://github.com/MisterBooo/LeetCodeAnimation
 */
//冒泡排序
class sf{
    var $arr = array();
    var $len = 0;
    function __construct(){
        $this->arr =array(8,1,4,7,8,0,9,5);
        $this->len =sizeof($this->arr);
    }
    
    /*
     * 冒泡排序
     * 比较相邻的元素。如果第一个比第二个大，就交换他们两个。
                  对每一对相邻元素作同样的工作，从开始第一对到结尾的最后一对。这步做完后，最后的元素会是最大的数。
                  针对所有的元素重复以上的步骤，除了最后一个。
                  持续每次对越来越少的元素重复上面的步骤，直到没有任何一对数字需要比较。
     */
    public function BubbleSort (){
        if(empty($this->arr) || !is_array($this->arr) ){
            return '';
        }
        // 设定一个标记，若为true，则表示此次循环没有进行交换，也就是待排序列已经有序，排序已经完成
        $flag =true;
        $len =sizeof($this->arr);
        $num =0;
        for($i=1;$i<$len;$i++ ){
            for($j=0;$j<$len-1;$j++){
                if($this->arr[$j] > $this->arr[$j+1]){
                    $tem = $this->arr[$j];
                    $this->arr[$j] = $this->arr[$j+1];
                    $this->arr[$j+1] = $tem;
                    $flag =false;
                }
            }
            $num++;
            if($flag)break;
        }
        return $this->arr;
    }
    /*
     * 选择排序
     * 首先在未排序序列中找到最小（大）元素，存放到排序序列的起始位置
                   再从剩余未排序元素中继续寻找最小（大）元素，然后放到已排序序列的末尾。
                    重复第二步，直到所有元素均排序完毕。
    */
    public function selectSort(){
        if(empty($this->arr) || !is_array($this->arr) ){
            return '';
        }
        $len = $this->len;
        //总共需要比较n-1轮
        for($i=0;$i<$len-1;$i++){
            $min =$i;
            //每轮需要比较n-i次
            for($j=$i+1;$j<$len;$j++){
                if($this->arr[$j] < $this->arr[$min]){
                   $min = $j; 
                }
            }
            if($min != $i){
                $tem = $this->arr[$min];
                $this->arr[$min] = $this->arr[$i];
                $this->arr[$i] = $tem;
            }
        }
    }
    /*
     * 插入排序
     * 将第一待排序序列第一个元素看做一个有序序列，把第二个元素到最后一个元素当成是未排序序列。
                  从头到尾依次扫描未排序序列，将扫描到的每个元素插入有序序列的适当位置。（如果待插入的元素与有序序列中的某个元素相等，则将待插入元素插入到相等元素的后面。）
     */
    public function insertSort(){
        if(empty($this->arr) || !is_array($this->arr) ){
            return '';
        }
        $len = $this->len;
        // 从下标为1的元素开始选择合适的位置插入，因为下标为0的只有一个元素，默认是有序的
        for($i=1;$i<$len;$i++){
            // 记录要插入的数据
            $tem =$this->arr[$i];
            // 从已经排序的序列最右边的开始比较，找到比其小的数
            $j = $i;
           while($j>0 && $tem < $this->arr[$j-1]){ 
               $this->arr[$j] = $this->arr[$j-1];
               $j--;
           }
           // 存在比其小的数，插入
           if($j != $i){
               $this->arr[$j] =$tem;
           }
        }
    }
    /*
     * 希尔排序
     * 选择一个增量序列 t1，t2，……，tk，其中 ti > tj, tk = 1；
                按增量序列个数 k，对序列进行 k 趟排序；
                每趟排序，根据对应的增量 ti，将待排序列分割成若干长度为 m 的子序列，分别对各子表进行直接插入排序。仅增量因子为 1 时，整个序列作为一个表来处理，表长度即为整个序列的长度。
     */
}
$sfob = new sf();
// $sfob ->BubbleSort();
// $sfob -> selectsort();
$sfob->insertSort();
var_dump($sfob->arr);
die("ddddddd");
