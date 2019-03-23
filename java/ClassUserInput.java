import java.util.*;

public class ClassUserInput {

	private String[] variableClass;
	  
	private String[] methodGet() {
		return variableClass;
	}
	  
	private void methodSet() {
		List<String> variableMethod = new ArrayList<String>();
		Scanner variableScanner = new Scanner(System.in);
		while (variableScanner.next() != "exit") {
			variableMethod.add(variableScanner.next());
		}
		variableScanner.close();
		variableMethod.toArray(variableClass);
	}
	  
	public String[] main(String[] args) {
		ClassUserInput classInstance = new ClassUserInput();
		classInstance.methodSet();
		return methodGet();	
	}
	  
}
