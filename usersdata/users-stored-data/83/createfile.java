import java.io.File;

public class createfile {
    public static void main(String[] args) {
        try {
            File file = new File("D:demo1.txt");
            if(file.createNewFile()){
                System.out.println(file.getName()+ " is created sucessfully!!");
            }
            else{
                System.out.println(file.getName()+ " is already exist!!");
            }
            if (file.exists()) {
                System.out.println("Name of the file is " + file.getName());
                System.out.println("Length of the " + file.getName() + " is: " + file.length());
                System.out.println("The Location of " + file.getName() + " is: " + file.getAbsolutePath());
            } else {
                System.out.println(file.getName()+ " is not exist!!"); 
            }
        } catch (Exception e) {
            // TODO: handle exception
        }
    }   
}
