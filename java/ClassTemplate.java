public class ClassTemplate {

	private String[] variableClass;
	  
	private String[] methodGet() {
		return variableClass;
	}
	  
	private void methodSet(String[] methodVariable) {
		variableClass = methodVariable;
	}
	  
	public String[] main(String[] args) {
		ClassTemplate classInstance = new ClassTemplate();
		classInstance.methodSet(args);
		return methodGet();
	}
	  
}
