import java.io.File;

public class deletefile {
    public static void main(String[] args) {
        try {
            File file = new File("D:demo.txt");
            if (file.exists()) {
                file.delete();
                System.out.println(file.getName()+" is deleted successfully!!");
            }
            else{
                System.out.println(file.getName()+" is not deleted successfully!!");
            }
        } catch (Exception e) {
        }
    }
}
