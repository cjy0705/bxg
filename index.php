<?php
  // ����URL�Ż���Ӧ��ҳ��
  // ���·��
  header('content-type:text/html; charset=utf8;');

//   include('./header.html');
//   echo '<div>��ҳ����</div>';
//   include('./footer.html');

  // include����Ƕ����ҳ��

  // ����URL�е������ж��û�������ĸ�ҳ��

  // include('./views/main/login.html');

  // var_dump($_SERVER);

  // Ĭ��Ŀ¼����
  $dir = 'main';
  // Ĭ���ļ�����
  $filename = 'index';

  // ����URL�е�·��
  if(array_key_exists('PATH_INFO',$_SERVER)){
    // ·������
    // ����·��
    $path = $_SERVER['PATH_INFO'];//$_SERVER['PATH_INFO']��¼·�� /main/index
    // ��ȡ�ַ���
    $str = substr($path, 1); // main/index
    // �ָ��ַ���
    $ret = explode('/',$str);
    if(count($ret) == 2){
      // ����·��
      // ����Ĭ��·��
      $dir = $ret[0];
      // ����Ĭ���ļ�����
      $filename = $ret[1];
    }else{
      // �������ͳһ��ת����¼ҳ
      $filename = 'login';
    }
  }
  // Ƕ����ҳ��
  include('./views/'.$dir.'/'.$filename.'.html');


 ?>
