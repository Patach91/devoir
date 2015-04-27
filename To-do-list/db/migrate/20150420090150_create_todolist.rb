class CreateTodolist < ActiveRecord::Migration
  def change
  	create_table :donnees do |t|
  		t.string :tache
  	end
  end
end
