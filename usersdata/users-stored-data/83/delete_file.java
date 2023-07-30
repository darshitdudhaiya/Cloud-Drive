import java.io.File;

public class delete_file{
    public static void main(String[] args) {
        try {
            File file = new File("D:demo1.txt");
            if (file.delete()) {
                System.out.println(file.getName()+ " is Deleted Successfully!!");
            } else {
                System.out.println(file.getName()+ " is Not Deleted Successfully!!");
            }            
        } catch (Exception e) {
        }
    }
}
